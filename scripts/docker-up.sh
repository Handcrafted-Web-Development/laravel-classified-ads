# Commande pour démarrer Docker (dans ce cas, nous utilisons Sail)
docker_up="./vendor/bin/sail up"

# Ouvrir un nouveau terminal dans PhpStorm et exécuter la commande './vendor/bin/sail up' pour démarrer mon container Docker
osascript -e "tell application \"System Events\" to keystroke \"T\" using {command down}"
osascript -e "tell application \"System Events\" to keystroke \"cd .. && $docker_up\" & return"
