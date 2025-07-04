

// Función para calcular el resultado basado en los números y la operación seleccionada
function calcular() {
    // Obtiene los valores de los números y la operación
    const n1 = parseFloat(document.getElementById('num1').value) || 0;
    const n2 = parseFloat(document.getElementById('num2').value) || 0;
    const op = document.getElementById('operacion').value;
  
    let resultado = 0;
  
    // Dependiendo de la operación seleccionada, realiza el cálculo
    if (op === 'sumar') {
      resultado = n1 + n2;
    } else if (op === 'restar') {
      resultado = n1 - n2;
    } else if (op === 'multiplicar') {
      resultado = n1 * n2;
    } else if (op === 'dividir') {
      // Si la división es por 0, muestra infinito
      resultado = n2 !== 0 ? n1 / n2 : '∞';
    }
  
    // Muestra el resultado
    document.getElementById('resultado').innerText = resultado;
  
    // Cambia el estilo del resultado si es impar o par
    if (resultado % 2 === 0 && resultado !== '∞') {
      document.getElementById('resultado').style.backgroundColor = '#dfd'; 
    } else if (resultado !== '∞') {
      document.getElementById('resultado').style.backgroundColor = '#fdd'; 
    } else {
      document.getElementById('resultado').style.backgroundColor = '';
    }
  }
  
  // Añade los eventos para que el cálculo se realice automáticamente
  document.getElementById('num1').addEventListener('input', calcular);
  document.getElementById('num2').addEventListener('input', calcular);
  document.getElementById('operacion').addEventListener('change', calcular);
  
  

  