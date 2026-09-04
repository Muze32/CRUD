const btnPendientes = document.getElementById("btnPendientes");
const btnRegulares = document.getElementById("btnRegulares");
const btnFinalizadas = document.getElementById("btnFinalizadas");
const btnTodas = document.getElementById("btnTodas");

btnPendientes.addEventListener("click", () => {
    mostrarFilas("Pendiente");
});

btnRegulares.addEventListener("click", () => {
    mostrarFilas("Regularizada");
});

btnFinalizadas.addEventListener("click", () => {
    mostrarFilas("Finalizada");
});

btnTodas.addEventListener("click", () => {
    mostrarFilas();
});

const mostrarFilas = (estadoFiltro) => {
    const tbody = document.getElementById("tbody");
    for (const row of tbody.children) {
        const td = row.querySelector(`[data-estado]`);

        if (!td) return;

        const estadoMateria = td.dataset.estado;
        if (estadoMateria === estadoFiltro || !estadoFiltro) {
            row.hidden = false;
        } else {
            row.hidden = true;
        }
    }
};