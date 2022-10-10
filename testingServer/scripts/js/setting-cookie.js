// Ajax manipulation
(function() {
    let httpRequest;
    // document.getElementById('ajaxButton').addEventListener('click', makeRequest);

    document.getElementById("ajaxButton").onclick = function() {
        let userName = document.getElementById("ajaxTextBox").value;
        makeRequest('http://127.0.0.1/testingServer/index.php', userName);
    };
    
    function makeRequest(url, userName) {
        httpRequest = new XMLHttpRequest();
        if (!httpRequest) {
            alert('Abandon : (Impossible de créer une instance de XMLHTTP)');
            return false;
        }
    
        httpRequest.onreadystatechange = alertContents;
        // httpRequest.addEventListener('readystatechange', alertContents);
        // httpRequest.open('GET', 'http://127.0.0.1/testingServer/ajax-cookie.html');
        // httpRequest.open('GET', 'http://127.0.0.1/testingServer/ajax-xml.xml');
        // httpRequest.send();
        // httpRequest.setRequestHeader('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');

        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        httpRequest.send('userName=' + encodeURIComponent(userName));
    }
    
    function alertContents() {
        try {
            if (httpRequest.readyState === XMLHttpRequest.DONE) {
                if (httpRequest.status === 200) {
                    // alert(httpRequest.responseText);
                    // var xmldoc = httpRequest.responseXML;
                    // var root_node = xmldoc.getElementsByTagName('root').item(0);
                    // alert(root_node.firstChild.data);

                    let response = JSON.parse(httpRequest.responseText);
                    alert(response.computedString);
                    
                } else {
                    alert('Problème avec le traitement de la requête.');
                }
            }
        } catch (error) {
            alert('Une exception s\'est produite : ' + error.description);
        }
    }
    })();