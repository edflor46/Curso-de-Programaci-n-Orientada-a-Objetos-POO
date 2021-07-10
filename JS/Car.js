class Car{
    constructor (license, drive){

        this.id;
        this.license = license;
        this.drive = drive;
        this.passenger;
    }
}

Car.prototype.printDataCar = function(){
    console.log(this.drive);
    console.log(this.drive.name);
    console.log(this.drive.document);

}