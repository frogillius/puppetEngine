class EncounterArea {
    constructor() {
        this.portrait = null;
        this.stats = {};
    }

    setEncounter(encounter) {
        this.portrait = encounter.portrait;
        this.stats = encounter.stats;
        this.render();
    }

    render() {
        const encounterContainer = document.getElementById('encounter-area');
        encounterContainer.innerHTML = `
            <div class="portrait">
                <img src="${this.portrait}" alt="Encounter Portrait">
            </div>
            <div class="stats">
                ${this.renderStats()}
            </div>
        `;
    }

    renderStats() {
        return Object.entries(this.stats).map(([key, value]) => `
            <div class="stat">
                <strong>${key}:</strong> ${value}
            </div>
        `).join('');
    }
}

export default EncounterArea;