function buscar(url, method, parametros, dados, funcao, classPagina) {
   request(url, method, parametros, dados, funcao, classPagina);
}

function salvar(url, method, parametros, dados, funcao, classPagina) {
   request(url, method, parametros, dados, funcao, classPagina);
}

function editar(url, method, parametros, dados, funcao, classPagina) {
   request(url, method, parametros, dados, funcao, classPagina);
}

function excluir(url, method, parametros, dados, funcao, classPagina) {
   request(url, method, parametros, dados, funcao, classPagina);
}

function request(url, method, parametros, dados, funcao, classPagina) {
    var xhr = new XMLHttpRequest();
    var url = url ;

    xhr.open(method, url, true);
    // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.setRequestHeader("Content-type", "multipart/form-data");

    if(!parametros) {
        xhr.send();
    }else {
        // xhr.send(`${parametros}=${JSON.stringify(dados)}`);
        xhr.send(dados);
    }

    xhr.onreadystatechange = function() {
        // requisição finalizada
        if(xhr.readyState == 4) {
                // requisicao bem sucedida
            if(xhr.status == 200) {
                funcao(xhr.responseText, classPagina);
                // console.log(xhr.responseText);
            }
        }
    }
}

// function sendArquivo(xhr, formData) {
//   var formData = new FormData($formUpload);
//   formData.append("i", i++);
//   xhr.send(formData);
// }
