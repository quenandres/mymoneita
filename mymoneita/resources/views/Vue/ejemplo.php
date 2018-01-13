<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <style>
            table, td{
                border: 1px solid black;
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
        <div id="app"></div>
        <div id="ejemplovue">
            <h2>{{ message }}</h2>
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th><input type="button" @click="agregarFila()" value="+" /></th>
                </thead>
                <tbody>
                    <tr v-for="persona in personas">
                        <td><input type="text" name="nombre[]" /></td>
                        <td><input type="text" name="apellido[]" /></td>
                        <td><input type="text" name="edad[]" /></td>
                        <td>
                            <select name="sexo[]">
                                <option value=""></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </td>
                        <td>
                            <input type="button" @click="borrarFila()" value="-" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/Vue/ejemplo.vue.js"></script>
    </body>
</html>