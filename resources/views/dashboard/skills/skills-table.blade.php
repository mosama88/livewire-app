       <div class="card-body">
           <div class="row col-6">
               <div class="input-group mb-3">
                   <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
                   <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default">
               </div>
           </div>
           <div class="text-nowrap">
               <table class="table">
                   <thead>
                       <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Progress</th>
                           <th>Actions</th>
                       </tr>
                   </thead>
                   <tbody class="table-border-bottom-0">

                       @if (!empty($data) && isset($data))
                           <?php $i = 0; ?>
                           @foreach ($data as $info)
                               <?php $i++; ?>
                               <tr>
                                   <td>{{ $i }}</td>
                                   <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                       <strong>{{ $info->name }}</strong>
                                   </td>
                                   <td>{{ $info->progress }}</td>

                                   <td>
                                       <div class="dropdown">
                                           <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                               data-bs-toggle="dropdown">
                                               <i class="bx bx-dots-vertical-rounded"></i>
                                           </button>
                                           <div class="dropdown-menu">
                                               <a class="dropdown-item" href="javascript:void(0);"><i
                                                       class="bx bx-edit-alt me-1"></i>
                                                   Edit</a>
                                               <a class="dropdown-item" href="javascript:void(0);"><i
                                                       class="bx bx-trash me-1"></i>
                                                   Delete</a>
                                           </div>
                                       </div>
                                   </td>
                               </tr>
                           @endforeach
                       @else
                           لا توجد بيانات
                       @endif
                   </tbody>
               </table>
           </div>
       </div>
