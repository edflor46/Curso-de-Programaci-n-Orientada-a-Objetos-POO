public class UberX extends Car{
    //Variables
    String brand;
    String model;

    /* -------------------------------------------------------------------------- */
    /*                                 Construtor                                 */
    /* -------------------------------------------------------------------------- */
    public UberX(String license, Account driver, String brand, String model){
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }
    
    /* -------------------------------------------------------------------------- */
    /*                                Imprimir Auto                               */
    /* -------------------------------------------------------------------------- */
    @Override
    void printDataCar() {
        // TODO Auto-generated method stub
        super.printDataCar();
        System.out.println("Modelo: " + model + "\n" + "Brand: " + brand);
    }
}
