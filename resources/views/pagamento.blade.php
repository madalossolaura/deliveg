@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row">
        <div id="pagamento" class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Pagamento
                    </h3>
                </div>
                
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            Cartão</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Número do Cartão"
                                required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div id="expMonth" class="form-group">
                                <label for="expityMonth">
                                    Data</label>
                                <div class="col-xs-6 col-lg-8">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-8">
                                    <input type="text" class="form-control" id="expityYear" placeholder="AA" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
           
            <p id="quant"></p>
      
            <br/>
            <button class="btn btn-success" id="pagar">Pagar</button>
        </div>
    </div>
</div>

  <script src='../js/app.js'></script>
  <script src='../js/pagamento.js'></script>
@endsection