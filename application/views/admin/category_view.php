<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการหมวดหมู่ข่าว</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <div class="text-right">
                <a href="<?php echo base_url('admin/add_category') ?>" class="btn btn-xl btn-primary"><i class="fa fa-plus"></i> เพิ่มหมวดหมู่</a>
            </div>

            <table class="table table-hover">
                <tr class="bg-success">
                    <th>#</th>
                    <th><h3>ชื่อหมวดหมู่</h3></th>
                    <th><h3>จัดการ</h3></th>
                </tr>
                <?php if($categories->num_rows() > 0){
                    foreach ($categories->result() as $category){
                    ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $category->name ?> </td>
                    <td>
                        <a href="<?php echo base_url('admin/edit_category/'.$category->category_id)?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> แก้ไข</a>
                        <a href="<?php echo base_url('admin/delete_category/'.$category->category_id)?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> ลบ</a>
                    </td>
                </tr>
                <?php }
                } else{ ?>
                <tr>
                    <td colspan="3">== ไม่มีข้อมูล ==</td>
                </tr>
                <?php } ?>
            </table>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->