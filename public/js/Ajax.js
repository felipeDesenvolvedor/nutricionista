function buscar(url, method, parametros, dados, funcao) {
   request(url, method, parametros, dados, funcao);
}

function request(url, method, parametros, dados, funcao) {
    var xhr = new XMLHttpRequest();   
    var url = url ;
    
    xhr.open(method, url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    if(!parametros) {

        xhr.send();
    }else {
        xhr.send(`${parametros}=${JSON.stringify(dados)}`);    
    }

    xhr.onreadystatechange = function() {
        // requisição finalizada 
        if(xhr.readyState == 4) {
                // requisicao bem sucedida 
            if(xhr.status == 200) {
                funcao(xhr.responseText);
            }
        }
    }
}