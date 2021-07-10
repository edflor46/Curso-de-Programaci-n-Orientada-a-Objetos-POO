public class Main {
    public static void main(String[] args) {
       UberX uberx = new UberX("ED123", new Account("Eduardo Flores", "Edlor1234"), "Chevrolet", "Sonic");
       System.out.println();
       uberx.setPassenger(4);
       uberx.printDataCar();
    }
}
