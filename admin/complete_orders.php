<?php include 'includes/header.php'; ?>
<div class="flex-grow-1 container-fluid mt-5">
                <div class="reports-table">
                    <div class="table-header">
                        <h2>Completed Orders</h2>
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
                                            <td>#5</td>
                                <td>Seema</td>
                                <td>Home & Kitchen</td>
                                <td>15/05/2025</td>
                                <td><span class="status completed">Completed</span></td>
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
                            
                        </tbody>
                    </table>
                </div>
            </div>

<?php include 'includes/footer.php'; ?>
</div>