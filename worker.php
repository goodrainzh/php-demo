<?php
    /**
     * 保存文件
     *
     * @param string $fileName 文件名（含相对路径）
     * @param string $text 文件内容
     * @return boolean
     */
    function saveFile($fileName, $text) {
        if (!$fileName || !$text)
            return false;
        if (makeDir(dirname($fileName))) {
            if ($fp = fopen($fileName, "a")) {
                if (@fwrite($fp, $text)) {
                    fclose($fp);
                    return true;
                } else {
                    fclose($fp);
                    return false;
                }
            }
        }
        return false;
    }

    /**
     * 连续创建目录
     *
     * @param string $dir 目录字符串
     * @param int $mode 权限数字
     * @return boolean
     */
    function makeDir($dir, $mode=0755) {
        if(!file_exists($dir)) {
            return mkdir($dir,$mode,true);
        } else {
            return true;
        }
    }



?>

<?php
    $content = date("Y-m-d  H:i:s") . "<br>";
    if(saveFile('/tmp/test.txt',$content)){
        echo date("Y-m-d H:i:s") . ' 写入成功';
        file_put_contents("php://stderr", date("Y-m-d H:i:s") . ' 写入成功\n');
    }else{
        file_put_contents("php://stderr", date("Y-m-d H:i:s") . ' 写入失败\n');
    }
?>
