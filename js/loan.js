//Simuladores Crédito Habitação e Transferência de crédito
function calculate( value, time, year_control = '1', spread = 1.1, euribor = 0.4 ) {
  let taxSpreadEuribor = spread + euribor;
  let taxPerMonth = Math.pow( ( 1 + taxSpreadEuribor / 100 ), 1 / 12 ) - 1;
  let timeInMonth = ( year_control == '1' ) ? 12 * time : time;  

  let divisorTax = ( 1 - Math.pow( 1 + taxPerMonth, - timeInMonth ) ) / taxPerMonth;
  let valuePerMonth = value / divisorTax;

  return valuePerMonth;
}

//Simuladores Crédito Pessoal e Crédito Automóvel
function simulatorCPCA( amount, period, TAN = 7.95, costPerMonth = 0, isYear = true ) {
    let rate = ( TAN / 100 ) * 1.04 / 12;
    let amountPerMonth = 0;
		if( isYear )
			 period = period * 12;
    if( rate != 0.0 ) {
        let x = Math.pow( 1 + rate, period );
        amountPerMonth = ( rate * ( x * amount ) ) / ( ( - 1 + x ) * ( 1 + rate * 0 ) );
        amountPerMonth = amountPerMonth + costPerMonth;
    } else if( period != 0 ) {
        amountPerMonth = amount / period;
        amountPerMonth = amountPerMonth + costPerMonth;
    }

    return amountPerMonth;
}
	
//Função para calcular a TIR do financiamento veícular.
function IRR(flows) {
  min = 0.0;
  max = 1.0;
  do {
    guest = (min + max) / 2;
    NPV = 0;
    for (let j = 0; j < flows.length; j++) 
          NPV += flows[j]/Math.pow((1+guest),j);
    
    if (NPV > 0)
      min = guest;
    else 
      max = guest;
    
  } while(Math.abs(NPV) > 0.000001);
  return guest * 100;
}