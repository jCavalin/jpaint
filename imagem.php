<?php
switch($_POST["acao"]){
	case "atualizarImagem":
        $data              = $_POST["imagem"];
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data              = base64_decode($data);
		file_put_contents('img.png', $data);
	break;
}
