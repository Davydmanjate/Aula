<?php 
include_once("../db.php");
include_once("../header.php");
?>
            <!-- Recent Sales Start -->
        <div id="content-page" class="content-page">
            <div class="container-fluid pt-4 px-4">
                
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Tabela users</h4>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-editable">
                    <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success"><i
                                 class="ri-add-fill"><span class="pl-1">Adicionar</span></i>
                              </button>
                    </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr class="text-white">
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Contact</td>
                                    <td>Email</td>
                                    <td>Username</td>
                                </tr>
                            </thead>

                            <?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM users");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
							/* PDO
								$stmt = $pdo->prepare("SELECT * FROM users ORDER BY id ASCE");
								$stmt->execute();
								$values = $stmt->fetchAll();
								
								foreach($values as $value) {
							*/	
											
							?>
                            
                            <tbody>
                        <tr class="table-info">
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['contact'] ?> </td>
                          <td> <?php echo $value['email'] ?></td>
                          <td> <?php echo $value['username'] ?> </td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="users/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <!-- Recent Sales End -->


<?php 
include_once ("../footer.php"); ?>

</html>