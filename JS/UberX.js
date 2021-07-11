class UberX extends Car {
    constructor(license, driver, brand, model){
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }

    printDataCar(){
        console.log(`
            Licence: ${this.license} 
            Driver: ${this.drive.name}
            Brand: ${this.brand}
            Model: ${this.model} 
        `);
    }
}