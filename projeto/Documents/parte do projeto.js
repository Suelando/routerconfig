var rangeInicio = '192.168.100.200';
var rangeFinal = '192.168.100.250';
var ipRede = '192.168.100.0';
var netmask = '255.255.255.0';
var autoritative;
//console.log(rangeInicio);
//console.log(rangeFinal);
//console.log(ipRede);
//console.log(netmask);
//Essa função em JS identifica qual a mascara utilizada.
function CheckValue(){
if (netmask == '255.255.255.0'){p
	console.log('Mascara /24');
}
else if (netmask == '255.255.0.0'){
	console.log('Mascara /16');
}
else{
	console.log('Mascara não identificada');
}
}
