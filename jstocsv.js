class TableCSVExporter{
	constructor (table, includeHeaders = true){
		this.table = table;
		this.rows = Array.from(table.querySelectorAll("tr"));

		console.log(this);

		if (!includeHeaders && this.rows[0].querySelectorAll("th").length) {
			this.rows.shift();
		}

		// console.log(this);

		console.log(this._findLongestRowLength());
	}

	convertToCSV(){
		const lines = [];
		const numCOls = this._findLongestRowLength();

		for(const row of this.rows){
			let line = "";

			for(let i = 0 ; i < numCOls ; i++){
				if (row.children[i] !== undefined) {
					line += TableCSVExporter.parseCell(row.children[i]);
				}

				line += (i !== (numCOls -1)) ? ",":"";
			}

			lines.push(line);
		}
		return lines.join("\n");

	}

	_findLongestRowLength(){
		return this.rows.reduce((l, row) => row.childElementCount > l ? row.childElementCount : l, 0);
	}

	static parseCell(tableCell){

		let parsedValue = tableCell.textContent;

		//replace all double quotes wit two double quotes

		parsedValue = parsedValue.replace(/"/g, `""`);

		// if value contains comma new line or double quote enclose in double quotes
		
		parsedValue = /[",\n]/.test(parsedValue) ? `"${parsedValue}"` : parsedValue;

		return parsedValue;
	}


}