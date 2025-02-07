class PlayerArea {
    constructor(playerData) {
        this.playerData = playerData;
        this.element = document.createElement('div');
        this.element.className = 'player-area';
        this.render();
    }

    render() {
        this.element.innerHTML = `
            <div class="portrait">
                <img src="${this.playerData.portrait}" alt="${this.playerData.name} Portrait">
            </div>
            <div class="stats">
                <h2>${this.playerData.name}</h2>
                <p>Health: ${this.playerData.health}</p>
                <p>Mana: ${this.playerData.mana}</p>
                <p>Level: ${this.playerData.level}</p>
            </div>
        `;
    }

    updatePlayerData(newData) {
        this.playerData = { ...this.playerData, ...newData };
        this.render();
    }

    getElement() {
        return this.element;
    }
}

export default PlayerArea;