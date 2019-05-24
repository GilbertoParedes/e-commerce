$(document).ready(function(){
	CrearBotonPayu();
});
function CrearBotonPayu()
{

    var montoPago=$("#htotal").val();

     $.ajax({
                dataType: "json",
                method:"GET",
                url: "pago/obtenerinformacionpago/"+montoPago
                })
            .done(function( infopago ){

            var html_button="<form method='post' action='https://sandbox.gateway.payulatam.com/ppp-web-gateway/'>\
              <input name='merchantId'    type='hidden'  value='"+infopago.merchantId+"'   >\
              <input name='accountId'     type='hidden'  value='"+infopago.accountId+"'   >\
              <input name='description'   type='hidden'  value='"+infopago.description+"'   >\
              <input name='referenceCode' type='hidden'  value='"+infopago.referenceCode+"'   >\
              <input name='amount'        type='hidden'  value='"+infopago.amount+"'   >\
              <input name='tax'           type='hidden'  value='"+infopago.tax+"'   >\
              <input name='taxReturnBase' type='hidden'  value='"+infopago.taxReturnBase+"'   >\
              <input name='currency'      type='hidden'  value='"+infopago.currency+"'   >\
              <input name='signature'     type='hidden'  value='"+infopago.signature+"'   >\
              <input name='test'          type='hidden'  value='"+infopago.test+"'   >\
              <input name='buyerEmail'    type='hidden'  value='"+infopago.buyerEmail+"'   >\
              <input name='responseUrl'    type='hidden'  value='"+infopago.responseUrl+"'   >\
              <input name='confirmationUrl'    type='hidden'  value='"+infopago.confirmationUrl+"'   >\
              <input name='Submit'        type='submit'  value='Pagar' >\
            </form>";

            $("#idPayuButtonContainer").append(html_button);

    });


}