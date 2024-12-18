class Ajax{
    static get(url, callback){
        let xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4){
                if(xhr.status !== 200){
                    callback(xhr.responseText);
                }
                if(xhr.status === 200){
                    callback(xhr.responseText);
                }
            }

        }
        xhr.send();
    }
    static post(url, data, 
            contentType = 'application/json'
        ,callback){
        let xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', contentType);
        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4){
                if(xhr.status === 200){
                    callback(xhr.responseText);
                }
            }
        }
        xhr.send(data);
    }
    static put(url, data, 
            contentType = 'application/json'
        ,callback){
        let xhr = new XMLHttpRequest();
        xhr.open('PUT', url, true);
        xhr.setRequestHeader('Content-Type', contentType);
        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4){
                if(xhr.status === 200){
                    callback(xhr.responseText);
                }
            }
        }
        xhr.send(data);
    }
    static delete(url ,callback){
        let xhr = new XMLHttpRequest();
        xhr.open('DELETE', url, true);
        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4){
                if(xhr.status === 200){
                    callback(xhr.responseText);
                }
            }
        }
        xhr.send();
    }
}


export default Ajax;
