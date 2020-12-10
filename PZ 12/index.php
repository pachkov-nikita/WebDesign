
<body>

    <table class="table">
        <thead id="Head">
        </thead>
        <tbody id="Body"> 
        </tbody>
    </table>
    
</body>

<script>
const requestURL = 'https://jsonplaceholder.typicode.com/users';


function sendRequest(method, url, body = null) {
   return new Promise( (resolve, reject) => {
       const requestURL = url;
       const xhr = new XMLHttpRequest();
       xhr.open(method, requestURL);
       xhr.responseType = 'json';
       xhr.setRequestHeader('Content-Type', 'application/json')
       xhr.onload = () => {
           if (xhr.status >= 400) {
               reject(xhr.response);
           } else {
               resolve(xhr.response);
           }

       }
       xhr.onerror = () => {
           reject (xhr.response);
       }
       xhr.send(JSON.stringify(body))

   })
}


sendRequest('GET', requestURL).then( data => {
    
    addHeader(Object.keys(data[0]));

    for(let i=0 ; i<Object.keys(data).length ; i++){
        addRow(data[i], i);
    }
}).catch( error => console.error(error));

const Head = document.getElementById("Head");
const Body = document.getElementById("Body");

function addHeader(dataHeader){
    const Row = Head.insertRow(0);
    let Cell;let Text;
    for(let i=0 ; i<4 ; i++){
        Cell = Row.insertCell(i);
        Text = document.createTextNode(dataHeader[i]);
        Cell.appendChild(Text);
    }
}

function addRow(dataToRow, index){
    const Row = Body.insertRow(index);
    let Cell;let Text;
    for(let i=0 ; i<4 ; i++){
        Cell = Row.insertCell(i);
        Text = document.createTextNode(dataToRow[Object.keys(dataToRow)[i]]);
        Cell.appendChild(Text);
    }
}
</script>

</html>