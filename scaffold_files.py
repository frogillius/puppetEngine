import os
import json

def create_placeholder_file(filepath):
    # Create the directory if it doesn't exist.
    directory = os.path.dirname(filepath)
    os.makedirs(directory, exist_ok=True)
    
    ext = os.path.splitext(filepath)[1].lower()
    if ext == ".png":
        # Write a simple placeholder text for image files.
        content = f"Placeholder image for {os.path.basename(filepath).split('.')[0]}"
    elif ext == ".json":
        # Write an empty JSON object.
        content = "{}"
    else:
        content = ""
    
    with open(filepath, "w", encoding="utf-8") as f:
        f.write(content)

def process_node(node):
    if not isinstance(node, dict):
        return
    
    # Process current node if keys match file references.
    for key, value in node.items():
        if key in ["img", "cfg"] and isinstance(value, str):
            create_placeholder_file(value)
        elif isinstance(value, dict):
            process_node(value)
        # Extend if lists are ever included.
        elif isinstance(value, list):
            for item in value:
                process_node(item)

def main():
    # Path to your fallback.json file.
    fallback_path = "static/fallback.json"
    
    # Read file and remove any comment lines starting with '//'
    with open(fallback_path, "r", encoding="utf-8") as f:
        lines = f.readlines()
    json_str = "\n".join(line for line in lines if not line.lstrip().startswith("//"))
    
    data = json.loads(json_str)
    process_node(data)
    print("All specified files have been added.")

if __name__ == "__main__":
    main()