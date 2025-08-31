<?php include 'includes/header.php'; ?>

    <div class="flex-grow-1 container-fluid mt-5">
       <div class="quick-stats mt-5">
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: #4e73df;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-info">
                            <h3>12</h3>
                            <p>Total orders</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: #1cc88a;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>4</h3>
                            <p>Completed</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: #f6c23e;">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>5</h3>
                            <p>Pending</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: #e74a3b;">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>3</h3>
                            <p>Cancelled</p>
                        </div>
                    </div>
                </div>

    <!-- Tabla de reportes -->
                <div class="reports-table">
                    <div class="table-header">
                        <h2>All Orders</h2>
                        <button class="btn-primary">
                            <i class="fas fa-plus"></i> New Order
                        </button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Shreya</td>
                                <td>Skincare</td>
                                <td>15/05/2025</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                               <td>#2</td>
                                <td>Pooja</td>
                                <td>Jwellary</td>
                                <td>15/05/2025</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#3</td>
                                <td>Aaditya</td>
                                <td>Shirt</td>
                                <td>15/05/2025</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                              <td>#4</td>
                                <td>Johari</td>
                                <td>Trouser</td>
                                <td>15/05/2025</td>
                                <td><span class="status rejected">Cancelled</span></td>
                                <td>
                                    <button class="btn-action"><i class="fas fa-eye"></i></button>
                                    <button class="btn-action"><i class="fas fa-download"></i></button>
                                    <button class="btn-action"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    </div>
<?php include 'includes/footer.php'; ?>
</div>