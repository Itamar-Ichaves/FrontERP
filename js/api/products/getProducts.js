
const preencherFormulario = (category) =>{
    teste.getElementById('id').value = category.id;
    teste.getElementById('Nome').value = category.name;
    teste.getElementById('tenant_id').value = category.tenant_id;
    teste.getElementById('Descrição').value = category.description;
}

function categoryGet(url) {
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText
    
}

function createCategory(category) {
    
}

function main() {
    data = categoryGet('http://localhost:8081/api/categories')
    const categoryData = JSON.parse(data); 
       
}

let conteudo = "";

categoryData.map(function(){
    conteudo += "tr";
    conteudo += "td"+item.name+"</td>";
});

console.log(conteudo);
main()