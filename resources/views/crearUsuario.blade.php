<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        @vite('resources/css/app.css')
    </head>
<body>
    <main class="w-full h-screen bg-[#dfe3e6] flex justify-center items-center" >
        <div class="w-4/5 h-4/5 bg-white flex flex-col justify-center items-center">
            <div class="flex justify-between items-center p-[20px] w-11/12">
                <h1 class="text-[20px] font-semibold">Agregar Usuario</h1>
                <button class="bg-[#024a6b] text-white p-[5px] flex justify-center items-center gap-[5px]">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                    Volver al listado
                </button>
            </div>
            <form action="../api/usuarios/crear" method="POST" class="flex flex-col justify-evenly items-center gap-[20px] h-4/5 w-full">
                <div class="flex flex-col justify-center items-center gap-[30px] w-11/12">

                    <div class="flex flex-row gap-[10px] w-11/12">
                        <div class="flex flex-col w-1/2">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" name="nombre" id="nombre" class="border p-[8px]" placeholder="Ingrese el nombre">
                        </div>
                        <div class="flex flex-col w-1/2">
                            <label for="apellido">
                                Apellido
                            </label>
                            <input type="text" name="apellido" id="apellido" class="border p-[8px]" placeholder="Ingrese el apellido">
                        </div>
                    </div>
                    <div class="w-11/12">
                        <label for="email">
                            E-mail
                        </label>
                        <input type="email" name="email" id="email" class="border w-full p-[8px]" placeholder="Ingrese E-mail">
                    </div>
                    <div class="w-11/12">
                        <label for="contrasena">
                            Contraseña
                        </label>
                        <input type="password" name="contrasena" id="contrasena" class="border w-full p-[8px]" placeholder="Ingrese contraseña">
                    </div>
                    
                    

                </div>
                <button type="submit" class="bg-[#024a6b] text-white p-[5px] w-1/4">
                    Guardar
                </button>
            </form>
        </div>
    </main>
</body>
</html>