<?php 



//Conexão
include_once '28dbconnect.php';

//Header
include_once '28_B_crud_header.php';


//Mensagem
include_once '28mensagem.php';
?>



    <!-- BOOTSTRAP -->


    <div class="m-5 ">
        <div class="fs-1 mb-5">
            <h1>Lista de Clientes</h1>
        </div>
        <div class="table-responsive">            
            <table class="table  table-hover ">
                <thead>
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">SOBRENOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">IDADE</th>                   
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                        $sql="SELECT * FROM clientes";
                        $resultado= mysqli_query($connect,$sql);
                        
                        if (mysqli_num_rows($resultado)>0):
                    ?>
                    <?php while($cliente_data =mysqli_fetch_array($resultado)):?>
                            
                        <tr>
                            <td> <?php echo $cliente_data['nome']; ?> </td>
                            <td> <?php echo $cliente_data['sobrenome']; ?> </td>
                            <td> <?php echo $cliente_data['email']; ?> </td>
                            <td> <?php echo $cliente_data['idade']; ?>  </td>
                            
                            <td>   
                                                                
                                    
                                <a href='28_B_crud_editar.php?id=<?php echo $cliente_data['id'];?>'  class="btn btn-sm btn-primary"> 
                                    <i class="bi bi-pencil"></i>
                                </a>
                                
                                <!-- O atributo  data-bs-toggle pode ser modal ou popover. -->
                                <a href='28crud_delete.php?id=<?php echo $cliente_data['id'];?>' class="btn btn-sm btn-danger"  data-bs-toggle='modal' data-bs-target="#exampleModal<?php echo $cliente_data['id'];?>"> 
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                              
                            </td>
                        </tr>

                        <!--Modal-->
                        <div class='modal fade' id="exampleModal<?php echo $cliente_data['id'];?>" tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header bg-danger text-white'>
                                        <h1 class='modal-title fs-5 ' id='exampleModalLabel'>ATENÇÃO!</h1>
                                        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body mb-3 mt-3'>
                                        Tem certeza que deseja <b>EXCLUIR</b> o usuario <?php echo $cliente_data['nome'];?>?
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
                                        <a href="28_B_crud_delete.php?id=<?php echo $cliente_data['id'];?>" type='button' class='btn btn-danger'>Sim, quero!</a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    <?php 
                    endwhile; 
                else:?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    
                    
                    
                <?php
                endif;
                ?>                  
                </tbody> 
            </table>
        </div>

        <br>
        <a href="28_B_crud_adicionarclientes.php" class="btn btn-info"> Adicionar cliente</a>
    </div>




<?php include_once '28_B_crud_footer.php';?>

     
 
