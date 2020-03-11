const app = {

    urlDatos : "/resources/data/autos.json",

    filtro : "todos",

    cargarFichas : function(){
        const cont = document.querySelector("#content");
        var html = '';
     
        fetch(this.urlDatos)
            .then( response => response.json())
             .then( autos => { 
                for( let auto of autos){
                    //**Tarea: escribir la línea de código que falta a continuación*/
                    if(auto.tipo === this.filtro || this.filtro === 'todos'){
                        html +=`
                        <div class="card m-3" style="width:250px;display:inline-block;">
                                <img src="${ auto.imagenUrl }"
                                        alt="${auto.marca}" 
                                        class="card-img-top" 
                                        onclick="app.verFoto(this)">
                            <div class="card-body">
                                <h3 class="card-title">${auto.marca}</h3>
                                <span class="card-text">${auto.modelo}</span>
                                <span class="card-text">${auto.anio}</span>
                                <br>
                                <small>  
                                    ${auto.motor.desplazamiento }L, 
                                    ${auto.motor.potencia } HP, 
                                    ${auto.motor.rendimiento } K/l</small>
                            </div>
                        </div>
                        `;
                    }
                }                    
                cont.innerHTML = html;
            })
            .catch( error => console.log(error));
    },

    verFoto : function(e){
                const mf = document.querySelector("#modal-foto");            
                mf.innerHTML = `
                        <img src="${ e.getAttribute("src") }" alt="Foto" onclick="this.parentElement.style.display = 'none'">
                `; 
                mf.style.display = 'block';
                console.log(mf.innerHTML);          
            }
};

window.onload = function(){
    app.cargarFichas();
    
    //**Analizar el siguiente código y prepararse para explicarlo */
    
    const amenu = document.querySelectorAll("a.menu");          //Qué es a.menu
    amenu.forEach( menuItem => {                                //Qué representa menuItem
        menuItem.addEventListener("click",function( event ){
            event.preventDefault();
            app.filtro = menuItem.getAttribute("data-filtro");  //Que valor se le está asignando a app.filtro
            app.cargarFichas();                                 //por qué se vuelve a ejecutar este método
        });
    });

};


