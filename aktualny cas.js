var datum = new Date()
var den = datum.getDate()
var mesiac = datum.getMonth()+1
var rok = datum.getFullYear()
document.write("<strong>" + "Dnešný dátum: " + den + "." + mesiac + "." + rok + "</strong>")