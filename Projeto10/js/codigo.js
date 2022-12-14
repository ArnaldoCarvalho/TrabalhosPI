
function Disciplinas(){
    var ComboAno = document.getElementById("ComboAno");
    var Ano = ComboAno.selectedIndex;
    var D10 = [
      'PT',
      'AI',
      'MAT',
      'FQ',
      'EF',
      'Filo',
      'MED',
      'TP',
      'FAC',
      'LE',
    ]
    var D11 = [
      'PT',
      'IEBD',
      'MAT',
      'FQ',
      'EF',
      'Filo',
      'MED',
      'TP',
      'FAC',
      'LE',
      'ProjectT',
      'FCT',
    ]
    var D12 = [
      'PT',
      'IEBD',
      'MAT',
      'Filo',
      'MED',
      'PI',
      'TDM',
      'FCT',
      'ProjectT',
    ]

    switch (Ano) {
      case 1:
        nochecked(D11)
        nochecked(D12)
        checked(D10)
        break;
      case 2:
        nochecked(D10)
        nochecked(D12)
        checked(D11)
        break;
      case 3:
        nochecked(D10)
        nochecked(D11)
        checked(D12)
        break;
      case 0:
        AbelAll(D10)
        AbelAll(D11)
        AbelAll(D12)
      default:
        break;
    }
}

function checked(VetId){
  for (i = 0; i < VetId.length; i++) {
    document.getElementById(VetId[i]).checked = true;
    document.getElementById(VetId[i]).removeAttribute("disabled", "true");
  }
}
function nochecked(VetId) {
  for (i = 0; i < VetId.length; i++) {
    document.getElementById(VetId[i]).checked = false;
    document.getElementById(VetId[i]).setAttribute("disabled", "true");
  }
}
function AbelAll(VetId){
  for (i = 0; i < VetId.length; i++) {
    document.getElementById(VetId[i]).checked = false;
    document.getElementById(VetId[i]).removeAttribute("disabled", "true");
  }
}
