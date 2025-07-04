// funcion para la tabla de multiplicar
document.getElementById("btnGenerar").addEventListener("click", function() {
  
    const numero = parseInt(document.getElementById("numero").value);
    //
    const resultado = document.getElementById("resultado");
    // Limpiamos cualquier resultado previo
    resultado.innerHTML = "";

    // Si el número que el usuario escribió es un número válido
    if (!isNaN(numero)) {
      // Hacemos un bucle desde 1 hasta 12 para mostrar la tabla de multiplicar
      for (let i = 1; i <= 12; i++) {
        // Mostramos el resultado de multiplicar el número por cada valor de 1 a 12
        resultado.innerHTML += `${numero} x ${i} = ${numero * i}<br>`;
      }
    } else {
      // Si no escribió un número válido, mostramos un mensaje de error
      resultado.innerHTML = "Por favor, ingresa un número válido.";
    }
  });

// funcion para calcular potencias
document.getElementById("btnPotencia").addEventListener("click", function() {
  // obtenmmos el numero base y exponente
  const base = parseFloat(document.getElementById("base").value);
  const exponente = parseFloat(document.getElementById("exponente").value);
  
  const resultado = document.getElementById("resultadoPotencia");

  // Si la base y el exponente son números válidos y el exponente es mayor o igual a 0
  if (!isNaN(base) && !isNaN(exponente) && exponente >= 0) {
      // Inicializamos la variable que va a guardar el resultado de la potencia
      let resultadoParcial = 1;
      // Hacemos un bucle desde 1 hasta el valor del exponente
      for (let i = 1; i <= exponente; i++) {
        // Vamos multiplicando la base por sí misma para obtener la potencia
        resultadoParcial *= base;
        // Mostramos el resultado de cada paso
        resultado.innerHTML += `${base} ^ ${i} = ${resultadoParcial}<br>`;
      }

      // Si el exponente es 0, el resultado siempre es 1 (cualquier número elevado a 0 es 1)
      if (exponente === 0) {
        resultado.innerHTML = `${base} ^ 0 = 1`;
      }
    } else {
 
      resultado.innerHTML = "Ingresa una base y un exponente válidos (exponente ≥ 0).";
    }
  });
