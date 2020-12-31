 @extends('layouts.admin')

@section('content')

<div class="page-content">
          <div class="header">
            <h2>Все <strong>Товары</strong></h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="dashboard">Главное</a>
                </li>
               
                <li class="active">Товары</li>
              </ol>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>Список</strong></h3>
                </div>
                <div class="panel-content">
                  
                  <div class="m-b-20">
                    <div class="btn-group">
                      <button id="table-add_new" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> Добавить новый</button>
                    </div>
                  </div>
                  <table class="table table-hover dataTable" id="table-editable">
                    <thead>
                      <tr>
                        <th>Имя поставщика</th>
                        <th>Бренд</th>
                        <th>Цена производителя</th>
                        <th>Цена каспи</th>
                        <th>Производитель</th>
                        <th class="text-right">Действие</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if(count($products) !=0)
                       @foreach($products as $product)
                        <tr>
                          <td>{{$product->name}}</td>
                          <td>
                            @if($product->brand)
                              {{$product->brand}}
                            @else
                              Нету информаций
                            @endif
                            
                          </td>
                          <td>{{$product->manufac_price}}</td>
                          <td>{{$product->kaspi_price}}</td>
                         <td>{{$product->manufactorId}}</td> 
                         
                          <td class="text-right"><a class="edit btn btn-sm btn-default" href="javascript:;"><i class="icon-note"></i></a>  <a class="delete btn btn-sm btn-danger" href="javascript:;"><i class="icons-office-52"></i></a>
                          </td>
                        </tr>
                      @endforeach
                      @else
                      <p>В базе поставщиков не найдено.</p>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2015 </span>
                <span>THEMES LAB</span>.
                <span>All rights reserved. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
              </p>
            </div>
          </div>
        </div>
        
@endsection
