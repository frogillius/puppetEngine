# Layout
Game window is divided into 3 resizeable areas. The order is left to right, then top to bottom. Stats are gotten from a json, referencing an icon from the json. Nothing should be hard coded into display components, to make modding easier.
The 3 big areas can have their width adjusted, and the components inside can have their hight adjusted.
<hr>

## Section 1
Section 1 is the encounters area. Portrait puppet on top. Stats below puppet. <br>
It will display the portrait and stats of the current encounter. The portrait contains the portrait puppet.

## Section 2
Section 2 is the stage area. The stage is at the top, being able to render as many puppets and objects as we want. 
It can render a parralax background, let's say 5 layers.
Below the stage is the dialog area. It will display text and buttons.
## Section 3
Section 3 is the player area. It will always show the player's puppet in the portrait puppet area. Portrait on top, stats below the puppet.
## Objects
Objects are to be rendered on the stage, and they can have multiple clickable areas for interaction.
## Puppets
Puppets are as they say they are, a dynamic and posable representation of an abritrary character.
### Stage puppet
Full body. Animated for walk cycles and interactions
### Portrait puppet
Bust portrait. Shows more nuanced emotion and tone during dialog.