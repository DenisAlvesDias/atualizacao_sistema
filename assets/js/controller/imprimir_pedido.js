var app = angular.module('app', [])

app.controller('imprimir_pedido', function($scope, $http, $window, $timeout) {
    document.getElementById("principal").style.fontSize = "40px";
    $scope.pedido = angular.fromJson(localStorage.getItem("pedido_imprimir"));
    console.log($scope.pedido);
    //  let metodo = "http://localhost/novoGerencial/src/api/index.php/getFormaPagamentoPedido/";
    let metodo = "../../../api/index.php/getFormaPagamentoPedido/";
    if ($scope.pedido.tipo == "app") {
        metodo = "https://www.onesolucoes.com.br/beta/api/index.php/getFormaPagamentoPedido/";
    }
    //$http.get(metodo + $scope.pedido.id + "?idEmpresa=" + $scope.pedido.id_empresa)
    $http.get(metodo + $scope.pedido.id + "?idEmpresa=" + $scope.pedido.id_empresa)
        .then(function(response) {
            $scope.pedido.formas = response.data.list;
        });

    // $http.get("http://localhost/novoGerencial/src/api/index.php/getEmpresa/" + $scope.pedido.id_empresa + "?idEmpresa=" + $scope.pedido.id_empresa)
    $http.get("../../../api/index.php/" + "getEmpresa/" + $scope.pedido.id_empresa + "?idEmpresa=" + $scope.pedido.id_empresa)
        .then(function(response) {
            let tamanho_impressao = response.data.list[0].tamanho_papel;
            if (tamanho_impressao == 80)
                document.getElementById("principal").style.fontSize = "18px";
            else if (tamanho_impressao == 70)
                document.getElementById("principal").style.fontSize = "16px";
            else if (tamanho_impressao == 60)
                document.getElementById("principal").style.fontSize = "14px";
            else if (tamanho_impressao == 58)
                document.getElementById("principal").style.fontSize = "12px";
            let listaTemp = [];
            for (let i = 0; i < $scope.pedido.produtos.length; i++) {
                let existe = false;
                for (let i2 = 0; i2 < listaTemp.length; i2++) {
                    if ($scope.pedido.produtos[i].nome == listaTemp[i2].nome && $scope.pedido.produtos[i].adicional.length == 0 && listaTemp[i2].adicional.length == 0 &&
                        $scope.pedido.produtos[i].observacao_produto == '' && listaTemp[i2].observacao_produto == '') {
                        existe = true;
                        listaTemp[i2].quantidade = parseFloat(listaTemp[i2].quantidade) + parseFloat($scope.pedido.produtos[i].quantidade);
                        listaTemp[i2].valor = parseFloat(listaTemp[i2].valor) + parseFloat($scope.pedido.produtos[i].valor);
                    }
                }

                if (listaTemp.length == 0 || existe == false)
                    listaTemp.push($scope.pedido.produtos[i]);
            }
            //   listaTemp.forEach(item =>{
            //    item.valor = parseFloat(item.quantidade) * parseFloat(item.valor);
            //    })
            $scope.pedido.produtos = listaTemp;



            var countUp = function() {
                $window.close();
            }

            var abrirImpressao = function() {
                $window.print();
            }
            $timeout(abrirImpressao, 500);
            $timeout(countUp, 1000);
            $scope.retornaData = function(data) {
                if (data) {
                    var temp = data.split("-");
                    return new Date(data);
                }
            }
        });


})
