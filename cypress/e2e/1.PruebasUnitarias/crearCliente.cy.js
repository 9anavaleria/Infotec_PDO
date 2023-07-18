describe('Prueba Unitaria', () => {
    it('creacion de cliente', () => {
        cy.on("uncaught:exception", (e, runnable) => {
            console.log("error", e);
            console.log("runnable", runnable);
            return false;
            });
            cy.viewport(1536, 656)
    cy.visit('http://localhost:8081/Infotec_definitivo-main/?c=Cliente')
    cy.get('[type="int"]').type('10')
    cy.get('[name="identificacion_cliente"]').type('1254876954')
    cy.get('[name="nombre_cliente"]').type('Daniel')
    cy.get('[name="apellido_cliente"]').type('Hernandez')
    cy.get('[name="telefono_cliente"]').type('3145984561')
    cy.get('[name="correo_cliente"]').type('danielhez@gmail.com')
    cy.get('.row > .btn').click()
    cy.get('.div').should('include.text', '10')
    })
})
  