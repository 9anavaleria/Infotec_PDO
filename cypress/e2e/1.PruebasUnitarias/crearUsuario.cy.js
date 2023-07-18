describe('Prueba Unitaria', () => {
    it('creacion de cliente', () => {
        cy.on("uncaught:exception", (e, runnable) => {
            console.log("error", e);
            console.log("runnable", runnable);
            return false;
            });
            cy.viewport(1536, 656)
    cy.visit('http://localhost:8081/Infotec_definitivo-main/?c=Usuario')
    cy.get('select.form-control').select('Administrador')
    cy.get('[type="int"]').type('78541269')
    cy.get('[name="nombres_usuario"]').type('Juan')
    cy.get('[name="apellidos_usuario"]').type('Martinez')
    cy.get('[name="correo_usuario"]').type('juan.mar@hotmail.com')
    cy.get('[name="telefono_usuario"]').type('3112785495')
    cy.get('.row > [type="password"]').type('juan.321')
    cy.get('.row > .btn').click()
    cy.get('.div').should('include.text', 'Juan')
    })
})