

//ejecutar funcion en el evento clic
document.getElementById("btn_open").addEventListener("click", open_close_menu)
// Declarar variables
var side_menu = document.getElementById("side_menu")
var btn_open = document.getElementById("btn_open")
var body = document.getElementById("body")
var barra = document.getElementById("barra")

// evento para mostrar y ocultar el menu
   function open_close_menu (){
      body.classList.toggle("body_move");
      side_menu.classList.toggle("menu_side_mov");
      barra.classList.toggle("barra_borde")
   }     