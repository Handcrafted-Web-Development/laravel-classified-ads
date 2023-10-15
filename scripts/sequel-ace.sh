# Spécifiez le chemin vers l'application Sequel Ace (vérifiez le chemin sur votre système).
sequel_ace_app="/Applications/Sequel Ace.app"

# Chemin vers le fichier .env (personnalisez en fonction de votre configuration)
env_file="../.env"

# Extrait les informations de connexion à la base de données
db_host=$(grep -o 'DB_HOST=.*' "$env_file" | cut -d'=' -f2)
db_username=$(grep -o 'DB_USERNAME=.*' "$env_file" | cut -d'=' -f2)
db_password=$(grep -o 'DB_PASSWORD=.*' "$env_file" | cut -d'=' -f2)
db_database=$(grep -o 'DB_DATABASE=.*' "$env_file" | cut -d'=' -f2)

# Affiche les informations (à des fins de démonstration)
echo "DB_HOST: $db_host"
echo "DB_USERNAME: $db_username"
echo "DB_PASSWORD: $db_password"
echo "DB_DATABASE: $db_database"

# Commande pour ouvrir Sequel Ace.
open -a "$sequel_ace_app"

# Attendez quelques secondes pour que Sequel Ace s'ouvre.
sleep 5

cliclick c:855,478 # Clic sur le champ "Host"
cliclick t:"$db_host" # Saisie de l'adresse du serveur

cliclick c:855,512 # Clic sur le champ "Username"
cliclick t:"$db_username" # Saisie du nom d'utilisateur

cliclick c:855,545 # Clic sur le champ "Password"
cliclick t:"$db_password" # Saisie du mot de passe

cliclick c:855,581 # Clic sur le champ "Database"
cliclick t:"$db_database" # Saisie du nom de la base de données

cliclick c:1070,779 # Clic sur le bouton "Connect"
