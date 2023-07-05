    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Posts list
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                             <a href="?page=add" class="btn btn-info me-md-2"><i class="fas fa-user-plus"></i></a>   
                            </h6>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Twit</th>
                                            <th>User_id</th>
                                            <th>Created</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM posts";
                                        $result = mysqli_query($conn, $sql);
                                        while($row = $result->fetch_assoc()) {
                                    ?>  
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['twit']; ?></td>
                                            <td><?php echo $row['user_id']; ?></td>
                                            <td><?php echo $row['created']; ?></td>
                                            <td>
                                                 <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                                                 <a href="/admin/modules/posts/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                            </td>
                                           
                                        </tr>
                                    
                                    <?php      
                                        }

                                    ?>
                                    
                                        
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>