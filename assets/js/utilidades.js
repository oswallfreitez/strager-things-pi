export function agregarResaltado(texto = '', palabraClave = '') {
    const regexPuntuacion = /[.,:;!?()"]/g;
    const textoActualizado = texto.split(' ').map(palabra => {
        const palabraNormalizada = palabra.replace(regexPuntuacion, '').toLocaleLowerCase();
        const palabraClaveNormalizada = palabraClave.toLocaleLowerCase();

        if (palabraNormalizada !== palabraClaveNormalizada) {
            return palabra
        }

        return palabra = `<span class="bg-red-400 text-black">${palabra}</span>`
    })

    return textoActualizado.join(' ')
}