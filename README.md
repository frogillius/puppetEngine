# Game Window Layout

This project is a JavaScript-based game window layout designed to facilitate the rendering of encounters, stages, and player information in a dynamic and interactive manner.

## Project Structure

The project consists of the following files:

- **src/index.js**: Entry point of the application. Initializes the game window layout and renders the main components.
- **src/components/EncounterArea.js**: Manages the display of the encounter's portrait and stats. Includes methods to update encounter information.
- **src/components/StageArea.js**: Handles the rendering of the stage, including puppets and objects. Includes methods for adding and removing objects from the stage.
- **src/components/PlayerArea.js**: Displays the player's puppet and stats. Includes methods to update the player's information.
- **src/assets/data.json**: Contains JSON data for the game, including encounter stats and icon references.
- **package.json**: Configuration file for npm, listing dependencies and scripts for the project.

## Setup Instructions

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd game-window-layout
   ```

3. Install the dependencies:
   ```
   npm install
   ```

4. Start the application:
   ```
   npm start
   ```

## Overview

The game window is divided into three resizable areas:

- **Encounter Area**: Displays the current encounter's portrait and stats.
- **Stage Area**: Renders puppets and objects, including a parallax background.
- **Player Area**: Always shows the player's puppet and stats.

This layout is designed to be flexible and modifiable, allowing for easy customization and extension.