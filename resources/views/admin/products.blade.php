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
                        <th>Контакты</th>
                        <th>РРЦ</th>
                        <th>НДС</th>
                        
                        <th class="text-right">Действие</th>
                      </tr>
                    </thead>
                    <tbody>
                    
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
