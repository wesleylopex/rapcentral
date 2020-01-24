<?php

if (!defined('BASEPATH'))
    exit('No direct script acess allowed');

class Crop {

    private $src;
    private $data;
    private $dst;
    private $type;
    private $result;
    private $extension;
    private $modulo;
    private $error;
    private $nameFile;

    function __construct($src, $data, $file, $modulo) {
        $this->modulo = $modulo;
        $this->setSrc($src);
        $this->setData($data);
        $this->setFile($file);
        $this->crop($this->src, $this->dst, $this->data);
    }

    function validate($src, $data, $file, $width, $height) {
        $this->modulo = 'crop';
        $this->setSrc($src);
        $this->setData($data);
        $this->setFile($file);

        if (!empty($this->src) && !empty($this->dst) && !empty($this->data)) {

            switch ($this->type) {
                case IMAGETYPE_GIF:
                    $src_img = imagecreatefromgif($this->src);
                    break;
                case IMAGETYPE_JPEG:
                    $src_img = imagecreatefromjpeg($this->src);
                    break;

                case IMAGETYPE_PNG:
                    $src_img = imagecreatefrompng($this->src);
                    break;
            }

            if (!$src_img) {
                $this->msg = "Falha na leitura do arquivo";
                return;
            }

            $size = getimagesize($this->src);
            $size_w = $size[0]; // natural width
            $size_h = $size[1]; // natural height

            $src_img_w = $size_w;
            $src_img_h = $size_h;

            $tmp_img_w = $this->data->width;
            $tmp_img_h = $this->data->height;
            $dst_img_w = $this->data->width;
            $dst_img_h = $this->data->height;

            $src_x = $this->data->x;
            $src_y = $this->data->y;

            if ($src_x <= -$tmp_img_w || $src_x > $src_img_w) {
                $src_x = $src_w = $dst_x = $dst_w = 0;
            } else if ($src_x <= 0) {
                $dst_x = -$src_x;
                $src_x = 0;
                $src_w = $dst_w = min($src_img_w, $tmp_img_w + $src_x);
            } else if ($src_x <= $src_img_w) {
                $dst_x = 0;
                $src_w = $dst_w = min($tmp_img_w, $src_img_w - $src_x);
            }

            if ($src_w <= 0 || $src_y <= -$tmp_img_h || $src_y > $src_img_h) {
                $src_y = $src_h = $dst_y = $dst_h = 0;
            } else if ($src_y <= 0) {
                $dst_y = -$src_y;
                $src_y = 0;
                $src_h = $dst_h = min($src_img_h, $tmp_img_h + $src_y);
            } else if ($src_y <= $src_img_h) {
                $dst_y = 0;
                $src_h = $dst_h = min($tmp_img_h, $src_img_h - $src_y);
            }

            // Scale to destination position and size
            $ratio = $tmp_img_w / $dst_img_w;
            $dst_x /= $ratio;
            $dst_y /= $ratio;
            $dst_w /= $ratio;
            $dst_h /= $ratio;

            imagedestroy($src_img);
            if (file_exists($src)) {
                unlink($src);
            }

            if ($dst_img_w < $width || $dst_img_h < $height) {
                return false;
            } else {
                return true;
            }
        }
        return true;
    }

    private function setSrc($src) {
        if (!empty($src)) {
            $type = exif_imagetype($src);

            if ($type) {
                $this->src = $src;
                $this->type = $type;
                $this->extension = image_type_to_extension($type);
                $this->setDst();
            }
        }
    }

    private function setData($data) {
        if (!empty($data)) {
            $this->data = json_decode(stripslashes($data));
        }
    }

    private function setFile($file) {
        $errorCode = $file['error'];

        if ($errorCode === UPLOAD_ERR_OK) {
            $type = exif_imagetype($file['tmp_name']);

            if ($type) {
                $extension = image_type_to_extension($type);
                $src = './assets/uploads/' . $this->modulo . '/tv_serra' . $this->modulo . '_' . date('YmdHis') . '.original' . $extension;

                if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_JPEG || $type == IMAGETYPE_PNG) {

                    if (file_exists($src)) {
                        unlink($src);
                    }

                    $result = move_uploaded_file($file['tmp_name'], $src);

                    if ($result) {
                        $this->src = $src;
                        $this->type = $type;
                        $this->extension = $extension;
                        $this->setDst();
                    } else {
                        $this->error = 'Falha ao salvar a imagem';
                    }
                } else {
                    $this->error = 'Por favor, escolha arquivos do tipo: JPG, PNG, GIF';
                }
            } else {
                $this->error = 'Por favor, escolha uma imagem';
            }
        } else {
            $this->error = $this->codeToMessage($errorCode);
        }
    }

    private function setDst() {
        $this->nameFile = 'tv_serra_' . $this->modulo . '_' . date('YmdHis') . '.png';
        $this->dst = './assets/uploads/' . $this->modulo . '/' . $this->nameFile;
    }

    private function crop($src, $dst, $data) {
        if (!empty($src) && !empty($dst) && !empty($data)) {
            switch ($this->type) {
                case IMAGETYPE_GIF:
                    $src_img = imagecreatefromgif($src);
                    break;

                case IMAGETYPE_JPEG:
                    $src_img = imagecreatefromjpeg($src);
                    break;

                case IMAGETYPE_PNG:
                    $src_img = imagecreatefrompng($src);
                    break;
            }

            if (!$src_img) {
                $this->msg = "Falha na leitura do arquivo";
                return;
            }

            $size = getimagesize($src);
            $size_w = $size[0]; // natural width
            $size_h = $size[1]; // natural height

            $src_img_w = $size_w;
            $src_img_h = $size_h;

            $degrees = $data->rotate;

            // Rotate the source image
            if (is_numeric($degrees) && $degrees != 0) {
                // PHP's degrees is opposite to CSS's degrees
                $new_img = imagerotate($src_img, -$degrees, imagecolorallocatealpha($src_img, 0, 0, 0, 127));

                imagedestroy($src_img);
                $src_img = $new_img;

                $deg = abs($degrees) % 180;
                $arc = ($deg > 90 ? (180 - $deg) : $deg) * M_PI / 180;

                $src_img_w = $size_w * cos($arc) + $size_h * sin($arc);
                $src_img_h = $size_w * sin($arc) + $size_h * cos($arc);

                // Fix rotated image miss 1px issue when degrees < 0
                $src_img_w -= 1;
                $src_img_h -= 1;
            }

            $tmp_img_w = $data->width;
            $tmp_img_h = $data->height;
            $dst_img_w = $data->width;
            $dst_img_h = $data->height;

            $src_x = $data->x;
            $src_y = $data->y;

            if ($src_x <= -$tmp_img_w || $src_x > $src_img_w) {
                $src_x = $src_w = $dst_x = $dst_w = 0;
            } else if ($src_x <= 0) {
                $dst_x = -$src_x;
                $src_x = 0;
                $src_w = $dst_w = min($src_img_w, $tmp_img_w + $src_x);
            } else if ($src_x <= $src_img_w) {
                $dst_x = 0;
                $src_w = $dst_w = min($tmp_img_w, $src_img_w - $src_x);
            }

            if ($src_w <= 0 || $src_y <= -$tmp_img_h || $src_y > $src_img_h) {
                $src_y = $src_h = $dst_y = $dst_h = 0;
            } else if ($src_y <= 0) {
                $dst_y = -$src_y;
                $src_y = 0;
                $src_h = $dst_h = min($src_img_h, $tmp_img_h + $src_y);
            } else if ($src_y <= $src_img_h) {
                $dst_y = 0;
                $src_h = $dst_h = min($tmp_img_h, $src_img_h - $src_y);
            }

            // Scale to destination position and size
            $ratio = $tmp_img_w / $dst_img_w;
            $dst_x /= $ratio;
            $dst_y /= $ratio;
            $dst_w /= $ratio;
            $dst_h /= $ratio;

            $dst_img = imagecreatetruecolor($dst_img_w, $dst_img_h);

            // Add transparent background to destination image
            imagefill($dst_img, 0, 0, imagecolorallocatealpha($dst_img, 0, 0, 0, 127));
            imagesavealpha($dst_img, true);

            $result = imagecopyresampled($dst_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

            if ($result) {
                if (!imagepng($dst_img, $dst)) {
                    $this->error = "Falha em salvar a imagem cortada";
                }
            } else {
                $this->error = "Falha em cortar a imagem";
            }

            imagedestroy($src_img);
            imagedestroy($dst_img);
            if (file_exists($src)) {
                unlink($src);
            }
        }
    }

    private function codeToMessage($code) {
        $errors = array(
            UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded',
            UPLOAD_ERR_NO_FILE => 'No file was uploaded',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
            UPLOAD_ERR_EXTENSION => 'File upload stopped by extension',
        );

        if (array_key_exists($code, $errors)) {
            return $errors[$code];
        }

        return 'Erro desconhecido';
    }

    public function getResult() {
        return !empty($this->data) ? $this->dst : $this->src;
    }

    public function getNomeImagem() {
        return $this->nameFile;
    }

    public function getError() {
        return $this->error;
    }

}

?>