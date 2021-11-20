<?
namespace App\Models;

use CodeIgniter\Model;

class datamahasiswa extends Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM mahasiswa ORDER BY mahasiswa ASC");

        return $query->getResult();

    }
}
