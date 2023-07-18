describe('Prueba Integracion', () => {
    it('creación de categoría', () => {
        cy.on("uncaught:exception", (e, runnable) => {
            console.log("error", e);
            console.log("runnable", runnable);
            return false;
            });
            cy.viewport(1536, 656)
    cy.visit('http://localhost:8081/Infotec_definitivo-main/?c=Categoria')
    cy.get('.mb-3').type('1')
    cy.get('#validationCustom02').type('Lubricantes')
    cy.get('.row > .btn').click()
})
    it('validación de categoría', () => {
        cy.on("uncaught:exception", (e, runnable) => {
            console.log("error", e);
            console.log("runnable", runnable);
            return false;
            });
            cy.viewport(1536, 656)
    cy.visit('http://localhost:8081/Infotec_definitivo-main/?c=Categoria')
    cy.get('.div').should('include.text', 'Lubricantes')
    })
    it('creación de producto', () => {
        cy.on("uncaught:exception", (e, runnable) => {
            console.log("error", e);
            console.log("runnable", runnable);
            return false;
            });
            cy.viewport(1536, 656)
            cy.visit('http://localhost:8081/Infotec_definitivo-main/?c=Categoria')
            cy.get('.centarboton > .btn').click()
            cy.get('select.form-control').select('Lubricantes')
            cy.get('[name="id_producto"]').type('prod_3')
            cy.get('[name="nombre_producto"]').type('Kit De Arrastre Casarella')
            cy.get('[type="number"]').type('104500.00')
            cy.get('[name="exist_producto"]').type('2')
            cy.get('.row > .btn').click()
    })
    it('vañidación de producto', () => {
        cy.on("uncaught:exception", (e, runnable) => {
            console.log("error", e);
            console.log("runnable", runnable);
            return false;
            });
            cy.viewport(1536, 656)
            cy.visit('http://localhost:8081/Infotec_definitivo-main/?c=Producto')
    cy.get('.div').should('include.text', 'prod_3')
})
})