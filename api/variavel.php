<?php
function retornarBancoDeDados($idEmpresa)
{
     if ($idEmpresa == 10) {
        $bancoDeDados = "uaipe762_chama";
    } else {
        $bancoDeDados = "uaipe762_" . $idEmpresa;
    }
    return $bancoDeDados;
}

function retornarListaBancoDeDados()
{
    $lista = array();
    $lista[] = 'uaipe762_33';
    $lista[] = 'uaipe762_40';
    $lista[] = 'uaipe762_chama';
    $lista[] = 'uaipe762_28';
    $lista[] = 'uaipe762_45';

    $contador = 50;
    while ($contador <= 185) {
        $lista[] = "uaipe762_" . $contador;
        $contador++;
    }
    return $lista;
}

function retonarDadosOnesignal($id_empresa)
{
    $retorno = new stdClass();
    if ($id_empresa == 33) {
        $retorno->rest_api = "NDgzY2VjYTMtOTc4ZS00YTczLWFkMjctZDg2NzYzZGUwMTMw";
        $retorno->id_signal = "7e650e2a-759d-449d-bb58-aae3b184f283";
        $retorno->titulo = "One";
        $retorno->icone = "";
    } else if ($id_empresa == 10) {
        $retorno->rest_api = "NDc2MGRlMTItOWQyNC00N2FjLTg3ZGMtZmJjMjQxOWZiZDg5";
        $retorno->id_signal = "cd39b23c-2f7b-44d5-8cf8-4afff3521a37";
        $retorno->titulo = "Chama!";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/icone_grande/10.png";
    } else if ($id_empresa == 23) {
        $retorno->rest_api = "NzEzODE2NzAtY2VmMS00MzU2LTk4YWEtNzI3ZWNlODJkODRh";
        $retorno->id_signal = "4c0bd6b1-584a-4481-a2e3-1e3ac451e4e6";
        $retorno->titulo = "";
        $retorno->icone = "";
    } else if ($id_empresa == 28) {
        $retorno->rest_api = "MzE3YjdiMzYtODhkOS00ZGVjLWEyMjQtMjU0Yzk2OGQwNGFl";
        $retorno->id_signal = "c1680091-bb93-4235-b390-840aa3887f60";
        $retorno->titulo = "Forneria Molinari";
        $retorno->icone = "https://www.onesolucoes.com.br/sistema/uploads/2018-08-31-10-54-00logo principal.jpg";
    } else if ($id_empresa == 33) {
        $retorno->rest_api = "MTA2YTEzYjMtYzI5ZC00MzAwLWJiYzgtMGNjOWQzMTkwYjRk";
        $retorno->id_signal = "52ebe8dd-ba62-4848-9d66-44a8b0adcfcb";
        $retorno->titulo = "One Soluções";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/imagem_app/logo_one.jpg";
    } else if ($id_empresa == 45) {
        $retorno->rest_api = "ZjUxMjk5MzAtYzViZS00ZDA4LTgwNTYtYjg0MmFlODdiNGVj";
        $retorno->id_signal = "f6aa7154-f3e3-4ee7-afbc-d625f2fa89ea";
        $retorno->titulo = "Rei Lanches";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/imagem_app/logo_rei_lanches.png";
    } else if ($id_empresa == 51) {
        $retorno->rest_api = "MTNiZjg1MmMtY2NkZS00ZGRlLTg5ZWEtYzZmN2UwOGI5ODlj";
        $retorno->id_signal = "f79a45fc-b803-4c9c-825a-a9ed0d5c0db9";
        $retorno->titulo = "Chili Burguer";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/imagem_app/logo_chili.jpg";
    } else if ($id_empresa == 52) {
        $retorno->rest_api = "NGNiZmZiZGMtMDBhZS00NTU3LTgxZTUtOTBlM2ExMTg0Nzlk";
        $retorno->id_signal = "c1981f3f-2197-468d-b1fa-fbd1b2cda072";
        $retorno->titulo = "La Chapa";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/la_chapa_logo.jpg";
    } else if ($id_empresa == 53) {
        $retorno->rest_api = "N2FmZmQ3OGItZDJkOS00MGEyLWJmNDMtYzQ1MmZmZDMzZTc0";
        $retorno->id_signal = "feda4493-a1e2-48ef-9b3c-3239ad27b827";
        $retorno->titulo = "Hicks";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/hicks.jpg";
    } else if ($id_empresa == 54) {
        $retorno->rest_api = "ODAzYTMxN2EtNTEzNy00YjlkLWI5ZWUtMjczZDE1YWQ1MjBl";
        $retorno->id_signal = "c929436b-c6a1-483e-ad27-5b7011b416bd";
        $retorno->titulo = "La Chapa Formiga";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/la_chapa_logo.jpg";
    } else if ($id_empresa == 55) {
        $retorno->rest_api = "ZTg1NDA4ZTktMTUzMy00OWRjLTgxMTctNTVkMDZiMmEyZTE3";
        $retorno->id_signal = "fc156307-8fc7-4a2d-9d75-12240817c6e5";
        $retorno->titulo = "Restaurante Catedral";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/catedral.jpg";
    } else if ($id_empresa == 56) {
        $retorno->rest_api = "NjcxZGJjNjQtMjgyNi00NDEzLTkwNmUtN2FjNWYwY2Q4Mjli";
        $retorno->id_signal = "3db7b3a1-fd34-45f6-b379-4ebcfd482c6c";
        $retorno->titulo = "Boizinho Lanches";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/boizinho.png";
    } else if ($id_empresa == 57) {
        $retorno->rest_api = "MDNkZmM3N2YtYWM4ZS00MDQ0LTkyYTQtOGRkYWUzYmVmOWE3";
        $retorno->id_signal = "04612042-7b8d-4294-8e32-e48675f8f41a";
        $retorno->titulo = "Anônimos";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/icone_grande/57.png";
    } else if ($id_empresa == 58) {
        $retorno->rest_api = "Mzg1ZGI1Y2ItNGFjMy00NDAxLWE2ZjYtNzNkNmFmMWMyYzAw";
        $retorno->id_signal = "ed4aef68-f512-4927-88fb-25b015d86b05";
        $retorno->titulo = "Distribuidora Santa Luzia";
        $retorno->icone = "";
    } else if ($id_empresa == 59) {
        $retorno->rest_api = "MmJiYzMyMTUtYjI4OC00ZTkzLWE0ODctOWZkZDYwN2Q4ODBm";
        $retorno->id_signal = "38de3a9e-02c5-4daf-a8e6-c2866fd767b8";
        $retorno->titulo = "R.R. Transportes e Encomendas";
        $retorno->icone = "";
    } else if ($id_empresa == 60) {
        $retorno->rest_api = "OTE2MzQwOWQtY2Y5YS00OTAzLWE0YTYtNjUxNzIzMmI0MWRm";
        $retorno->id_signal = "7cc1d664-214b-4f1e-b907-2b9a9dba7ea4";
        $retorno->titulo = "Ester Amaral Pães e Cia";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/icone_grande/60.png";
    } else if ($id_empresa == 61) {
        $retorno->rest_api = "MmEzMGZiODgtOTRmNi00N2ZkLWI0YWYtYmFhM2QxNmJmY2Zl";
        $retorno->id_signal = "9b9d5f8d-0d33-47f2-80f6-ef2982fa2767";
        $retorno->titulo = "Tempero Refeições";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/temperorefeicoes.jpg";
    } else if ($id_empresa == 62) {
        $retorno->rest_api = "NmVlMWU5YmQtYjBhNS00ZjNiLTg0NjctODhlMmNhNDE5NDcz";
        $retorno->id_signal = "0e443530-c713-469c-a48e-4c4fd8e83950";
        $retorno->titulo = "Star Lanches";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/star_lanches.jpg";
    } else if ($id_empresa == 63) {
        $retorno->rest_api = "MDUxOGUxYjMtZmNlMC00YzUyLWEyZjItYjdkMzBmZjRlZjFm";
        $retorno->id_signal = "fa49593a-7cf1-4dd3-ab13-c296ed0808ca";
        $retorno->titulo = "Marmitas Caseira da Taty";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/marmitas_taty.jpg";
    } else if ($id_empresa == 65) {
        $retorno->rest_api = "NWQxZjk5NTItMzk1NS00M2IyLWE2YzQtYjVlZmNmNGZmZjg2";
        $retorno->id_signal = "c3c0cf03-c455-457c-abb6-e1cd350e9f75";
        $retorno->titulo = "Hortifruti Lamego";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/lamego.png";
    } else if ($id_empresa == 66) {
        $retorno->rest_api = "Nzk5NjllYzMtOTM5YS00OTFlLTg3NTAtYjcwODM3YzliNzE4";
        $retorno->id_signal = "9a2a7fba-494c-4c8f-a237-9ebca4b2cf07";
        $retorno->titulo = "Restaurante Meninos";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/restaurantemeninos.jpg";
    } else if ($id_empresa == 67) {
        $retorno->rest_api = "OWYwZjdmZDctMDMwZS00MTI4LWFjMTEtN2NmNzY4MzRkYWZj";
        $retorno->id_signal = "ce542bc6-e531-4f97-aa3b-f3924fdfe75f";
        $retorno->titulo = "Charlies";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/icone_grande/67.png";
    } else if ($id_empresa == 68) {
        $retorno->rest_api = "MjZjZTc2NjUtMDU3Zi00ZDBjLWJkMmMtMzE3ZmJlN2UyZDQ0";
        $retorno->id_signal = "f87446c7-d6fd-48e9-a2b2-a8a01cca8de2";
        $retorno->titulo = "Bistro Fit";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/bistro.png";
    } else if ($id_empresa == 69) {
        $retorno->rest_api = "ZTM3ZDE0NDMtNzc4Yi00NTFiLWI0MTUtNTY4OTNkYmU0ODZm";
        $retorno->id_signal = "82323fc1-dc4b-47ab-97a0-5706189e758d";
        $retorno->titulo = "Casa Tem Tem";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/casa_tem_tem.jpg";
    } else if ($id_empresa == 71) {
        $retorno->rest_api = "ZTY1ZDg0YzMtYzg5MC00MjU3LWI2YzEtY2ZmNDg4OWM5YThm";
        $retorno->id_signal = "f838cf8c-589b-4fec-b6f7-9cfae43675df";
        $retorno->titulo = "Skema Restaurante e Pizzaria";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/skema.png";
    } else if ($id_empresa == 72) {
        $retorno->rest_api = "OGU0MTkyNWMtNDUwZC00NTE5LWE0ZDYtZDY5MWVmNjIzNjM3";
        $retorno->id_signal = "6d549a46-f372-465a-9c93-c9b17bf1e59b";
        $retorno->titulo = "La Casa Hamburgueria";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/la_casa_papel.png";
    } else if ($id_empresa == 73) {
        $retorno->rest_api = "YzE0NzlkNDctYjRiZi00ZjNlLWIzMDEtY2VlNTk5N2RlOGJi";
        $retorno->id_signal = "e0e8bfa1-e24f-490d-853f-5a750f584c36";
        $retorno->titulo = "Beer Time Divinópolis";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/beertime.png";
    } else if ($id_empresa == 74) {
        $retorno->rest_api = "MjM1ZGFlMGEtMTQ4ZS00NWVlLTk4YTktNDNjOGUwOGQ0MjMy";
        $retorno->id_signal = "bed78bcf-8c40-447c-b04a-643019ac9f60";
        $retorno->titulo = "Brasil Fit Gourmet";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/brasilfit.png";
    } else if ($id_empresa == 75) {
        $retorno->rest_api = "ZDg1MmJhZGYtNTFiMC00OTRhLWJhYTctYzIzOTYwNTBhNDBh";
        $retorno->id_signal = "840cda5a-067e-4198-bc4d-8765d8f83853";
        $retorno->titulo = "Amostrado";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/amostrado.jpg";
    } else if ($id_empresa == 76) {
        $retorno->rest_api = "MjY2YWI5NjAtNzg4Ni00MTE3LTgwN2ItMGI1NzQzMTNjNTk0";
        $retorno->id_signal = "65f2a2ba-c08a-4b9e-8bbb-73d8588ebf7f";
        $retorno->titulo = "Império Foods";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/imperio_foods_2.png";
    } else if ($id_empresa == 77) {
        $retorno->rest_api = "NDIwODViNDgtNmVhNy00Njk1LTgxMDktMDY2NmMzOGIzN2Fl";
        $retorno->id_signal = "2f605e94-33e4-4c18-89f4-f49849dd557d";
        $retorno->titulo = "ParaTodos";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/paratodos.png";
    } else if ($id_empresa == 78) {
        $retorno->rest_api = "ODg4ZmVmOWMtMDdmMC00YTFhLWFlNmEtNjA2YjY0YjFlODA1";
        $retorno->id_signal = "f1a39bfa-0081-4d6b-9b89-49073e120a7e";
        $retorno->titulo = "Kidbacon";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/kidbacon.png";
    } else if ($id_empresa == 79) {
        $retorno->rest_api = "MWVmN2MxMTMtNDgxOS00NzE5LTlmNTUtMGY5ZTNmODgxN2Rk";
        $retorno->id_signal = "dbbfe9e1-680f-4f99-8722-1c67aeefdf9b";
        $retorno->titulo = "BBB Hamburgueria";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/bbb_hamburgueria.png";
    } else if ($id_empresa == 81) {
        $retorno->rest_api = "NGUxYTFiNTUtODY0Mi00NGU1LTlhMDUtMjA3NzdlZjExY2I5";
        $retorno->id_signal = "58e3863c-0515-4c4f-962a-96ae1dcbd223";
        $retorno->titulo = "É Açaí";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/eacai.png";
    } else if ($id_empresa == 82) {
        $retorno->rest_api = "NTg5ZjIxMWQtMmUwMy00N2M4LWJkZmQtNTlmZGI4OWU4MjRi";
        $retorno->id_signal = "f33a121d-ac4b-4cea-addd-1e2a8e70b918";
        $retorno->titulo = "Dão Fine Burguer";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/dao.png";
    } else if ($id_empresa == 83) {
        $retorno->rest_api = "Y2MwMmZhZTItZTI1Mi00NWU0LTkxM2UtYzM2MzBhMjRkYWRm";
        $retorno->id_signal = "3c89b656-b05c-4515-9844-12cdb565d815";
        $retorno->titulo = "Frangão";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/frangao.png";
    } else if ($id_empresa == 84) {
        $retorno->rest_api = "ODNhYTU2ZWYtZDA4OC00YTUyLTk2MGYtMTYxMTU5YTViOTU5";
        $retorno->id_signal = "fb53caff-1164-44a4-9f9d-62bb36dd0ae6";
        $retorno->titulo = "Speed Box";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/speedbox.png";
    } else if ($id_empresa == 85) {
        $retorno->rest_api = "Njk3NTBmMTgtOTQxYS00MTUyLWE0NGItMmQ1Nzg4YTE2YjFl";
        $retorno->id_signal = "343d6e4a-e99a-41a8-a553-36ccdfe67787";
        $retorno->titulo = "Pizzaria RomuDog";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/romudog.png";
    } else if ($id_empresa == 86) {
        $retorno->rest_api = "MjcyZGI3ZTAtNGFiMy00OTFhLWJjOGEtZjA3OTdmNzg5MTMx";
        $retorno->id_signal = "11ee3a1a-22ed-457b-88dd-31e9600ac7c3";
        $retorno->titulo = "King Massas";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/kingmassas.png";
    } else if ($id_empresa == 88) {
        $retorno->rest_api = "MzhmMzRhZDQtZTc2Mi00YjY4LTg4MzAtNTQxMzY0ZTJhMDFh";
        $retorno->id_signal = "f39b2fb0-4c0a-4957-9a53-f291bc0ddc8c";
        $retorno->titulo = "1000 Coxinhas";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/1000coxinha.png";
    } else if ($id_empresa == 90) {
        $retorno->rest_api = "ZjNhMzI2OGMtMDUyMC00NjdkLWIyYjAtN2U5ZDIwYTA1MGM1";
        $retorno->id_signal = "76d9e944-2f95-49a7-bc5e-38096ce666e8";
        $retorno->titulo = "Adega Soranas";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/2020-08-10-17-51-29AdegaSoranasLOGOTIPO(1).png";
    } else if ($id_empresa == 92) {
        $retorno->rest_api = "NzJjNWRmYzAtZjA3MS00YWNjLTg2Y2MtYjJiMWJlNWQ2YjRj";
        $retorno->id_signal = "5d63c2e0-c69f-4742-8229-9587be6e6efa";
        $retorno->titulo = "Salgados da Manu";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/2020-09-03-16-08-319d1d8554-0481-47f8-8d93-81b67a3a115e.jpg";
    } else if ($id_empresa == 93) {
        $retorno->rest_api = "OTEzN2Q3NjctM2UyOC00MjE0LWJjNDgtYzhmMGZlMjlhMzg4";
        $retorno->id_signal = "07181539-3eab-4098-aa2d-be8cc9feb30d";
        $retorno->titulo = "Cantinho do Açaí";
        $retorno->icone = "https://www.onesolucoes.com.br/imagem/cantinhodoacai.png";
    } else if ($id_empresa == 94) {
      $retorno->rest_api = "MTI1MmJhOWItZjJlMy00ODdiLWFhZDAtY2I3MDJhMjAyMjE1";
      $retorno->id_signal = "25f0ba1b-f8c1-481c-a5f6-c3e969cb90b9";
      $retorno->titulo = "Tudo Bem Orgânico";
      $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/2020-09-02-16-20-59TudoBemOrgânico2(1)_pages-to-jpg-0001.jpg";
  } else if ($id_empresa == 95) {
    $retorno->rest_api = "NjBjZmRiMjUtZjFjMi00OTc2LWE5MTAtOWU4NmJhYWJjNzJm";
    $retorno->id_signal = "365580ee-b831-487e-9fc7-e79a20b81d24";
    $retorno->titulo = "Burgert Hamburgueria";
    $retorno->icone = "https://www.onesolucoes.com.br/imagem/burgert.png";
} else if ($id_empresa == 96) {
  $retorno->rest_api = "MmI0MjVhODktYjU0ZS00MmRjLWI4NTYtYTIxNGI4MzFlYmUx";
  $retorno->id_signal = "57aa9f1c-2adf-47c4-be0b-09b787c0592c";
  $retorno->titulo = "La Pizza D Caio";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/2020-11-10-08-57-54Capturar.PNG";
} else if ($id_empresa == 97) {
  $retorno->rest_api = "ZTZhOWFkODMtMDU1Ny00YWY5LThkZDQtMDUyODk5Y2VkNmRh";
  $retorno->id_signal = "23f083ed-7b81-48ba-b566-e105401cbd8a";
  $retorno->titulo = "La Pizza D Caio";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/garage_hamburgueria.png";
} else if ($id_empresa == 101) {
  $retorno->rest_api = "ZDIzMmEzNzktYjMwMS00MTViLWI4MjMtOWIyNDU0ZGFiMzAw";
  $retorno->id_signal = "b28e19d2-4adf-4f16-b74f-fc24b4f7ae07";
  $retorno->titulo = "Viale Pizza";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/vialepizza.png";
} else if ($id_empresa == 102) {
  $retorno->rest_api = "M2ViNmI3NmYtZDI0MS00ZmM4LTg0NjYtYzY0ZjNiMGIxNmE0";
  $retorno->id_signal = "c49f0db8-ab46-4b62-bc8c-a265ea77ecf7";
  $retorno->titulo = "Hamburgueria Texas";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/hamburgueriatexas.png";
} else if ($id_empresa == 105) {
  $retorno->rest_api = "OGQyODQzNzYtNGI2OC00ZjgzLWI4YTUtYzYxYWQyMWE4YmE0";
  $retorno->id_signal = "754577fa-5b5a-40f0-9bcf-22b2f7863d3c";
  $retorno->titulo = "Vila do Marques";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-02-12-16-49-01paes.JPG";
} else if ($id_empresa == 107) {
  $retorno->rest_api = "NWMyYTM0NjctNDA4My00YWE2LTgyMWQtNmEzN2ZkNGM4N2Q4";
  $retorno->id_signal = "6c6ca165-c1be-4542-98df-3234825d744c";
  $retorno->titulo = "No Capricho Lanches";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-03-20-09-15-20nocapricho.JPG";
} else if ($id_empresa == 109) {
  $retorno->rest_api = "M2ZkZTA1MjQtZTI3ZC00MGNjLWFlZWMtZWIxZDI4MmRhNGEw";
  $retorno->id_signal = "4974183e-cb87-4ecd-a0fd-d3c87f9f60a6";
  $retorno->titulo = "Naco Pizzas";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-03-26-01-03-44iconeappfinal_Prancheta1.png";
} else if ($id_empresa == 110) {
  $retorno->rest_api = "M2VhZTUwZmEtZDQ1My00ZGMyLWI1NWMtNjJjMjQyOGE0YzU3";
  $retorno->id_signal = "c70be418-3785-4f44-94b0-67582bf30ad6";
  $retorno->titulo = "Sacolão do Oswaldo";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-03-23-15-21-5041833382_1340387742761169_6330301801643900928_n.jpg";
} else if ($id_empresa == 115) {
  $retorno->rest_api = "NmI5MGM4NTMtMDE5Zi00YjhjLWJjOWYtZTFhYWM2OGU0OWZm";
  $retorno->id_signal = "53057aa0-5e2d-456a-bc3d-426e7773ef8f";
  $retorno->titulo = "The Classic Burger";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2022-01-05-17-45-37WhatsAppImage2022-01-05at17.44.53.jpeg";
} else if ($id_empresa == 116) {
  $retorno->rest_api = "MzNhMThiNDctMjU3Ny00Mjg1LTliZTctOWRhNzE0OWNkZThm";
  $retorno->id_signal = "b742165c-220e-4eae-bff1-83514c3c56ed";
  $retorno->titulo = "Tigrão Lanches";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-04-15-10-29-54tigrao.JPG";
} else if ($id_empresa == 117) {
  $retorno->rest_api = "MTMxZmUwYTEtZWI5NC00NTM3LWExYjQtNzE1NGZjZDAxMWU0";
  $retorno->id_signal = "ab40ba5f-0e8a-4706-b323-53c78ca92dc5";
  $retorno->titulo = "AZ Monkey";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-04-22-14-55-44azmonk.JPG";
} else if ($id_empresa == 119) {
  $retorno->rest_api = "ZTFiODliYjYtM2I5Yi00YzQzLTliODYtNmY3MGEwMDJlYzA4";
  $retorno->id_signal = "637f83a1-c095-40dc-b696-84c8ddc275b4";
  $retorno->titulo = "Junior Hamburgueria";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/junior.png";
} else if ($id_empresa == 123) {
  $retorno->rest_api = "MDEyMzc1ZjItOWI3Ny00YjE0LWIzOWYtYWNjM2FmZGFiZTcx";
  $retorno->id_signal = "e1535a0e-6135-458c-9115-f7d3bec3e291";
  $retorno->titulo = "Tigrão Pizzaria";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-06-21-10-23-55logotigrao.jpg";
} else if ($id_empresa == 125) {
  $retorno->rest_api = "NmVlMWU5YmQtYjBhNS00ZjNiLTg0NjctODhlMmNhNDE5NDcz";
  $retorno->id_signal = "0e443530-c713-469c-a48e-4c4fd8e83950";
  $retorno->titulo = "Dogz Hot Dog";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-07-07-23-17-253518e0c8-5d82-4c9a-906c-4b16843341b7.jpg";
} else if ($id_empresa == 128) {
  $retorno->rest_api = "MzljYmUzN2QtNjFlYi00ZTEzLWIzYzctZjkzNDljYTQ5Yzk4";
  $retorno->id_signal = "a7c8e87b-14a7-4af6-8064-d1bebba76534";
  $retorno->titulo = "Mc Nic Hamburger";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/logo/mcnic.png";
} else if ($id_empresa == 129) {
  $retorno->rest_api = "NmZjYTQ2MzYtNGM0Yy00N2Q4LTkwZGEtNjk3Yzk1YzI3NGI0";
  $retorno->id_signal = "30ec2cad-e2dd-4981-b11e-6dd57bdae498";
  $retorno->titulo = "Pani Di Caetani";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-09-01-11-19-47Capturar2.PNG";
} else if ($id_empresa == 130) {
  $retorno->rest_api = "ODUzZmQzNmQtM2MyMS00MzJhLTllZmUtNmEwMTNiYWNlOTFk";
  $retorno->id_signal = "e8833f45-4d2d-413b-b3b4-31263b74875b";
  $retorno->titulo = "Wally Burguer";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-09-20-22-34-43iconewally(1).jpg";
} else if ($id_empresa == 132) {
  $retorno->rest_api = "ODA4MjA5NWMtZDUwOS00NjA2LWEwYTQtYzU2ZTRhOWJmOWQ3";
  $retorno->id_signal = "393c3ffd-bb2d-4028-a4ff-f714691e1a87";
  $retorno->titulo = "Beer Time Divinópolis";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/beertime.png";
} else if ($id_empresa == 134) {
  $retorno->rest_api = "OWNiMjUzMzAtN2U5MC00M2Y2LWI3MjktY2FkMGU0N2E4OWM0";
  $retorno->id_signal = "8fb14fd3-f39f-4d0b-b54c-202531dac22c";
  $retorno->titulo = "Nugrill Hamburgueria Artesanal";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2021-10-05-14-22-22s.PNG";
} else if ($id_empresa == 147) {
  $retorno->rest_api = "NzUwMWZhYTYtYzVjYi00MjUzLTkzMGItZjY2ZDg0MTc5ZDAz";
  $retorno->id_signal = "ec0ef901-44f3-422c-9154-8e0bd81d5342";
  $retorno->titulo = "Top Lanches";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2022-04-13-16-17-59ImagemParaApp1.png";
} else if ($id_empresa == 152) {
  $retorno->rest_api = "Nzc2NDI5MmQtMzVlMy00YzMxLTliODItZDFmMjgxMDUyNDBh";
  $retorno->id_signal = "532f1373-02ff-4fa5-825a-cbf1e9dfb918";
  $retorno->titulo = "De Biasi";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2022-07-02-16-03-15WhatsAppImage2022-06-30at09.37.42.jpeg";
} else if ($id_empresa == 157) {
  $retorno->rest_api = "Yjc2OGIzZDQtMDc4Ni00Yjg2LTgwNjktY2U3ZDZhYmNhMTUw";
  $retorno->id_signal = "f2700ea6-5aee-444f-8a3b-2f881dedc45a";
  $retorno->titulo = "MELT N MELT";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2022-07-18-19-00-32melt.jpg";
} else if ($id_empresa == 167) {
  $retorno->rest_api = "MjRhMmI2YzgtMTI2NS00Yzg4LTg3NDUtMjlhNjkwOGZjN2Qx";
  $retorno->id_signal = "c5e3bd5a-b207-4287-89a8-5e7a57d966de";
  $retorno->titulo = "GR Distribuidora";
  $retorno->icone = "https://www.onesolucoes.com.br/imagem/uploads/2022-09-23-16-03-14555.png";
}


else {
        $retorno->rest_api = "";
        $retorno->id_signal = "";
        $retorno->titulo = "";
        $retorno->icone = "";
    }
    return $retorno;
}
