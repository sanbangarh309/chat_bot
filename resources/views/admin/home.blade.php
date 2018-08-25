@include('admin/header')
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                   <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Social Buttons</h4>
                                <!-- <p class="category">Backend development</p> -->
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                    <thead>
                                        <th></th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @include('admin/footer')