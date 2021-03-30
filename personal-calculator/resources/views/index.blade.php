<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Personal Calculator</title>
    <style>
        a{
            width: 100%;
           
        }
        input {
            width: 100%;
        }
    </style>
</head>
<body>
    @if (isset($operand))
    {{$operand}}
       
    @endif
    <x-alert type="danger" message="Lỗi mail"/>
    {{-- <button type="{ danger: isDeleting }">
        Submit
    </button> --}}
    <div class="container">
        <h3>PERSONAL CALCULATOR</h3>
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="post">
                    @csrf
                    <table class="table">
                        <tr>
                            <td colspan="5">
                                <input type="text" name="display" >
                            </td>
                        </tr>
                        <tr>&nbsp;</tr>
                        <tr>
                            <td>
                                <a type="button">
                                   <input id="inputValue"  type="submit" name="operand" class="btn btn-light" value="7" onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="8"  onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="9" onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                              <input id="inputValue"type="submit" name="operator" class="btn btn-light" value="/">
                                </a>
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="CE">
                                </a> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="4"  onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="5" onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                                    <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="6" onclick="setValue()">
                                </a>
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operator" class="btn btn-light" value="*">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="C">
                                </a> 
                            </td>
                           
                        </tr>
                        <tr>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="1" onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="2" onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="3" onclick="setValue()">
                                </a> 
                            </td>
                            <td>
                                <a type="button">
                             <input id="inputValue" type="submit" name="operator" class="btn btn-light" value="-">
                                </a> 
                            </td>
                            <td rowspan="2" >
                                <a type="button" >
                             <input id="inputValue" style="height:100px"  type="submit" name="operand" class="btn btn-light" value="=">
                                </a> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"> 
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value="0" onclick="setValue()" >
                                </a> 
                            </td>
                            <td> 
                                <a type="button">
                             <input id="inputValue"type="submit" name="operand" class="btn btn-light" value=".">
                               </td>
                            </a> 
                            <td>  
                                <a type="button">
                             <input id="inputValue"type="submit" name="operator" class="btn btn-light" value="+">
                            </a> 
                            </td>
                        </tr>
                          
                    </table>
                </form>
               

            </div>

        </div>
    </div>
    <script>
        function setValue(){
          return  document.getElementById("inputValue").value ;
        }
    </script>
</body>
</html>