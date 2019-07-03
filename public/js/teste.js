let prod = [];
getProducts();

function  getProducts () {
    return fetch('http://localhost:8000/produtos')
      .then(res => res.json())
      .then(res =>{
        prod = res
        renderProductos(res)
      })
}


function renderCategories() {
    const categorias = ['Legumes', 'Verduras', 'Frutas', 'Todos']
    categorias.forEach((categoria, index) => {
      document.getElementById('categories').innerHTML +=`
      <ul class="list-group">
            <a onclick="filterByCategory('${index+1}')"><li class="list-group-item list-group-item-action">${categoria}</li></a>
      </ul> 
      `
    })
  }

  function filterByCategory(index) {
    if(index == 4) return  renderProducts(prod) 
    
    const filter =  prod.filter(item => {
      if(index == item.id_categoria) {
        return item 
      }
    })
    renderProducts(filter)
  }