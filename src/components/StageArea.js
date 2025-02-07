class StageArea {
    constructor() {
        this.objects = [];
        this.puppets = [];
    }

    addObject(object) {
        this.objects.push(object);
        this.render();
    }

    removeObject(object) {
        this.objects = this.objects.filter(obj => obj !== object);
        this.render();
    }

    render() {
        // Logic to render the stage, puppets, and objects
        console.log("Rendering stage with objects:", this.objects);
    }

    addPuppet(puppet) {
        this.puppets.push(puppet);
        this.render();
    }

    removePuppet(puppet) {
        this.puppets = this.puppets.filter(p => p !== puppet);
        this.render();
    }
}

export default StageArea;